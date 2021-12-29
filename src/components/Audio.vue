<template>
  <k-block-figure
    :caption="content.caption"    
    empty-text="No file selected yet"
    :is-empty="!src"
    empty-icon="audio"
    @open="open"
    @update="update"
  >
    <div v-if="src">
      <audio :src="src" controls ></audio>
    </div>
    <div v-else>No audio selected</div>
  </k-block-figure>
</template>

<script>
/**
 * @displayName BlockTypeAudio
 * @internal
 */
export default {
  computed: {   
    src() {
      if (this.content.audio[0] && this.content.audio[0].url) {
        return this.content.audio[0].url;
      }
      return false;
    },
  }
};
</script>

<style lang="scss">
.k-block-type-audio .k-block-figure-container {
  display: block;
  text-align: center;
  line-height: 0;
}
.k-block-type-audio audio {
  width: 100%;
}
</style>
