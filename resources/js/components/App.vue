<template>
    <div>
        <h1 class="font-bold text-center text-4xl">
          File Uploading Comparisons
        </h1>

        <div></div>
        <h2 class="text-xl text-center">FilePond</h2>

        <file-pond
          name="image"
          ref="pond"
          label-idle="Click to choose image, or drag here..."
          server="/upload"
          accepted-file-types="image/*"
        />
    </div>
</template>
<script>
import vueFilePond from 'vue-filepond'
import "filepond/dist/filepond.min.css"
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type'

const FilePond = vueFilePond(FilePondPluginFileValidateType)

export default {
    components: { FilePond },
}
</script>