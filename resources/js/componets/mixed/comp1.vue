<template>
    <button class="btn btn-dark">Click</button> {{ add }} {{ sub }}
</template>
<script>
// this is not mixed but useabel in export function
import {ref,onMounted } from "vue";
import opt from "./opration"

export default {


    setup(){
        const add = ref();
        const sub = ref();

        onMounted(() => {
            add.value  = opt.addition(10,100)
            sub.value  = opt.subtraction(10,50)
          
        });
        return {
            add,
            sub
        }
    }

}

</script>
