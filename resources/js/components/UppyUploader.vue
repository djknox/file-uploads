<template>
    <div class="mt-8">
        <h2 class="text-xl">Uppy</h2>
        
        <dashboard
          :uppy="uppy"
          :props="{
            plugins: ['ImageEditor'],
            proudlyDisplayPoweredByUppy: false,
          }"
        />
    </div>
</template>
<script>
import Uppy from '@uppy/core'
import XHRUpload from '@uppy/xhr-upload'
import ImageEditor from '@uppy/image-editor'
import { Dashboard } from '@uppy/vue'

import '@uppy/core/dist/style.css'
import '@uppy/dashboard/dist/style.css'
import '@uppy/image-editor/dist/style.css'

export default {
  components: {
    Dashboard
  },
  computed: {
    uppy: () => new Uppy()
      .use(XHRUpload, {
        endpoint: '/upload',
        fieldName: 'image',
        headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf_token"]').content
        },
      }).use(ImageEditor, {
          id: 'ImageEditor',
          quality: 0.8,
          cropperOptions: { 
            viewMode: 1,
            background: false,
            autoCropArea: 1,
            responsive: true
          }
      })
  },
  beforeDestroy () {
    this.uppy.close({ reason: 'unmount' })
  }
}
</script>