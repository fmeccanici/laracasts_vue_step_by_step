<template>
  <div id="app">
    <message>Hello There</message>
    <message>Hello There AGain</message>
  </div>
</template>

<script>

import Message from './components/Message.vue'

export default {
  name: 'app',
  components: { Message },
  data () {
    return {

    }
  }
}
</script>

<style lang="scss">

</style>
