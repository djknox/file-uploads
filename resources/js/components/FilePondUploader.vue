<template>
    <div class="mt-8">
        <h2 class="text-xl">FilePond</h2>

        <file-pond
          name="image"
          ref="pond"
          label-idle="Click to choose image, or drag here..."
          accepted-file-types="image/*"
          :allow-multiple="true"
          credits=""
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