<template>
    <h1>
        comp 2</h1>
</template>

<!--<script>
import { onMounted, ref, reactive } from 'vue';


export default {
    setup(props, context) {

        const userData = reactive({
            name: "axay",
            email: "a@gmail.com"
        });

        function getData() {
            context.emit("sendData", userData)
        }

        onMounted(() => {
            getData()
        });

        return {
            getData,
            userData
        }

    }

}
</script>-->

<script setup>
// import { emit } from 'process';
import { onMounted, ref, reactive,defineEmits,provide ,inject} from 'vue';
const emit = defineEmits(['sendData', 'eventB'])
const userData = reactive({
    name: "axay",
    email: "a@gmail.com"
});

emit('sendData', userData)
let key = inject('key')
console.log(key);
</script>
