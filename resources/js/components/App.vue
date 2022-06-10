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
          accepted-file-types="image/*"
        />
    </div>
</template>
<script>
import vueFilePond, { setOptions } from 'vue-filepond'
import "filepond/dist/filepond.min.css"
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type'

setOptions({
    server: {
        process: {
            url: './upload',
            headers: {
                'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf_token"]').content
            }
        }
    }
})

const FilePond = vueFilePond(FilePondPluginFileValidateType)

export default {
    components: { FilePond },
}
</script>