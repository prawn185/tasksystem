<template>

    <v-select
        class="text-sm"
        :value="site.name"
        :clearable="false"
        :searchable="false"
        :get-option-label="site => site.name"
        :options="sites"
        @input="$emit('input', $event)"
    />

</template>

<script>

export default {

    props: {
        sites: { type: Array, required: true },
        value: { type: String, required: true },
    },

}
</script>
