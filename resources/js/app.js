
require('./bootstrap');

window.Vue = require('vue');

Vue.config.ignoredElements = ['video-js']

Vue.component('channel-uploads', {
    name:'channel-uploads',
    props: {
        channel: {
            type: Object,
            required: true,
            default: () => ({})
        }
    },
    data: () => ({
        selected: false,
        videos: [],
        progress: {},
        uploads: [],
        intervals: {},
        title:''
    }),

    methods: {
        upload() {
            this.selected = true
            this.videos = Array.from(this.$refs.videos.files)
            const uploaders = this.videos.map(video => {
                var self = this
                const form = new FormData()

                this.progress[video.name] = 0

                form.append('video', video)
                form.append('title', video.name)
                // form.append('title', self.name)

                return axios.post(`/channels/${this.channel.id}/videos`, form, {
                    onUploadProgress: (event) => {
                        console.log(event);
                        this.progress[video.name] = Math.ceil((event.loaded / event.total) * 100)
                        console.log(Math.ceil((event.loaded / event.total) * 100));
                        this.$forceUpdate()
                    }
                }).then(({ data }) => {
                    console.log(data);
                    window.location.href = '/channels/'+data.channel_id;
                    this.uploads = [
                        ...this.uploads,
                        data
                    ]
                })
            })

            axios.all(uploaders)
                .then(() => {
                    this.videos = this.uploads

                    this.videos.forEach(video => {
                        this.intervals[video.id] = setInterval(() => {
                            axios.get(`/videos/${video.id}`).then(({ data }) => {

                                if (data.percentage === 100) {
                                    clearInterval(this.intervals[video.id])
                                }
                                
                                this.videos = this.videos.map(v => {
                                    if (v.id === data.id) {
                                        return data
                                    }

                                    return v
                                })
                            })
                        }, 3000)
                    })
                })
        }
    }
})

const app = new Vue({
    el: '#app'
});

