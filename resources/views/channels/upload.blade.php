@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <channel-uploads :channel="{{ $channel }}" inline-template>
            <div class="col-md-12">
                <div class="card p-3 d-flex justify-content-center align-items-center" v-if="!selected">

                    <svg onclick="document.getElementById('video-files').click()" aria-hidden="true" width="70px" height="70px" focusable="false" data-prefix="far" data-icon="cloud-upload-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-cloud-upload-alt fa-w-20 fa-2x"><path fill="currentColor" d="M395.5 267.5l-99-99c-4.7-4.7-12.3-4.7-17 0l-99 99c-7.6 7.6-2.2 20.5 8.5 20.5h67v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12v-84h67c10.7 0 16.1-12.9 8.5-20.5zm148.2-67.4C539.7 142.1 491.4 96 432 96c-7.6 0-15.1.8-22.4 2.3C377.7 58.3 328.1 32 272 32c-84.6 0-155.5 59.7-172.3 139.8C39.9 196.1 0 254.4 0 320c0 88.4 71.6 160 160 160h336c79.5 0 144-64.5 144-144 0-61.8-39.2-115.8-96.3-135.9zM496 432H160c-61.9 0-112-50.1-112-112 0-56.4 41.7-103.1 96-110.9V208c0-70.7 57.3-128 128-128 53.5 0 99.3 32.8 118.4 79.4 11.2-9.6 25.7-15.4 41.6-15.4 35.3 0 64 28.7 64 64 0 11.8-3.2 22.9-8.8 32.4 2.9-.3 5.9-.4 8.8-.4 53 0 96 43 96 96s-43 96-96 96z" class="" fill="#f61c0d"></path></svg>
                    
                    <input type="file" multiple id="video-files" style="display: none;" ref="videos" @change="upload">
                    <p class="text-center">Upload Videos</p>
                </div>

                <div class="card p-3" v-else>
                    <div class="my-4" v-for="video in videos">
                        <div class="progress mb-3">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" :style="{ width: `${video.percentage || progress[video.name]}%` }" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                @{{ video.percentage ? video.percentage === 100 ? 'Video Processing completed.' : 'Processing' : 'Uploading' }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div v-if="!video.thumbnail" class="d-flex justify-content-center align-items-center" style="height: 180px; color: white; font-size: 18px; background: #808080;">
                                        Loading thumbnail ...
                                </div>
                                <img v-else :src="video.thumbnail" style="width: 100%;" alt="">
                            </div>
                            <div class="col-md-4">
                                <input type="text" v-model="title" class="form-control w-100" placeholder="Video Title">
                            </div>
                            <div class="col-md-8">
                                <a v-if="video.percentage && video.percentage === 100" target="_blank" :href="`/videos/${video.id}`">
                                    @{{ video.title }}
                                </a>
                                <h4 v-else class="text-center">
                                    @{{ video.title || video.name }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </channel-uploads>
    </div>
</div>
@endsection
