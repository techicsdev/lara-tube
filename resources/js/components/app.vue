<template>
	<div id="app">
		 <transition name="page" mode="out-in">
			<component :is="layout" v-if="layout" />
		</transition>
	</div>
</template>

<script>
import Loading from './Loading'

// Load layout components dynamically.
// const requireContext = require.context('~/layouts', false, /.*\.vue$/)
const requireContext = require.context('~/layouts', false, /.*\.vue$/)

const layouts = requireContext.keys()
	.map(file =>
		[file.replace(/(^.\/)|(\.vue$)/g, ''), requireContext(file)]
	)
	.reduce((components, [name, component]) => {
		components[name] = component.default || component
		return components
	}, {})

export default {
	el: '#app',
};
</script>
