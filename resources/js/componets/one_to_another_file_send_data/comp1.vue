<template>
    <router-link :to="{ name: 'second_another_file_send_data', params: { id: '123' } }" class="btn btn-dark">
        Edit</router-link>
    <input type="file" ref="fname" />
    <button @click="sendData">Submit</button>
</template>

<!--<script>
import { ref, onMounted } from 'vue';
import { useRouter } from 'vue-router';

export default {

    setup(props, context) {

        const fname = ref()
        const route = useRouter();
        const sendData = () => {

            fname.value.click();
        }

        onMounted(() => {

        });

        return {

            sendData,
            fname
        }

    }

}
</script>-->

<script setup>
import { ref, onMounted } from "vue";
import { useRouter } from "vue-router";
const fname = ref();
const route = useRouter();
const sendData = () => {
    fname.value.click();
};
</script>
