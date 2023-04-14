<template>
    <h1 class="text-center text-uppercase">
        axay</h1>
    <comp2 :sendUserData="userData"></comp2>
</template>

<!-- 
<script>
import comp2 from "../parent_to_child/comp2.vue"

export default {
    components: {
        comp2
    },
    setup(props) {

        return {
            userData: {
                name: "axay",
                email: "a@gmail.com"
            }
        }

    }
}
</script>-->

<script setup>
import comp2 from "../parent_to_child/comp2.vue"
import {ref} from "vue"

const userData = ref({
   
        name: "axay",
        email: "a@gmail.com"
    
})

// console.log(userData.value);

</script>
