<template>
    <div>
        <div class="btn-group">
            <div class="colorPicker">
                <div class="colorPicker-buttons inline-block p-1 mr-1 rounded border-white border-2"
                     v-for="(option, $index) in options"
                     :class="{'border-green': value === option.value}"
                >
                    <button class="btn w-10"
                            :key="$index"
                            ref="button"
                            :name="name"
                            @click="update($event.target.value)"
                            :value="option.value"
                            :disabled="isReadOnly"
                            :style="{background: option.value}"
                    />
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import HasInputOptions from './HasInputOptions.js'


export default {
    mixins: [Fieldtype, HasInputOptions],
    data() {
    },
    computed: {
        options() {
            return this.normalizeInputOptions(this.config.options);
        },
    }
};

</script>
