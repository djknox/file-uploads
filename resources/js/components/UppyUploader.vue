<template>
    <div class="mt-8">
        <h2 class="text-xl">Uppy</h2>
        
        <dashboard
          :uppy="uppy"
          :props="{
            theme: 'light',
            proudlyDisplayPoweredByUppy: false,
          }"
        />
    </div>
</template>
<script>
import Uppy from '@uppy/core'
import XHRUpload from '@uppy/xhr-upload'
import { Dashboard } from '@uppy/vue'

import '@uppy/core/dist/style.css'
import '@uppy/dashboard/dist/style.css'

export default {
  components: {
    Dashboard
  },
  computed: {
    uppy: () => new Uppy().use(XHRUpload, {
      endpoint: '/upload',
      fieldName: 'image',
      headers: {
          'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf_token"]').content
      }
    })
  },
  beforeDestroy () {
    this.uppy.close({ reason: 'unmount' })
  }
}
</script>