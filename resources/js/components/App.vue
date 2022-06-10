<template>
    <div>
        <h1 class="font-bold text-center text-4xl">
          File Uploading Comparisons
        </h1>

        <FilePondUploader />

        <UppyUploader />
    </div>
</template>
<script>
import FilePondUploader from './FilePondUploader'
import UppyUploader from './UppyUploader'

export default {
    components: {
      FilePondUploader,
      UppyUploader,
    },
}
</script>