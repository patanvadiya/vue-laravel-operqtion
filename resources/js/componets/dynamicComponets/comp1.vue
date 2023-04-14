
<template>
    <button @click="getcomp2('comp2')">comp2</button>

    <button @click="getcomp2('comp3')">comp3</button>
    
    <button @click="getcomp2('comp4')">comp4</button>
    
 
    
    <component :is="activeStep=compRef" />
</template>

<script setup>
import comp2 from "../dynamicComponets/comp2.vue"
import comp3 from "../dynamicComponets/comp3.vue"
import comp4 from "../dynamicComponets/comp4.vue"

import { ref,provide } from 'vue'
// console.log(activeStep);
// export default {
//     components: {
//         comp2,
//         comp3,
//         comp4
//     },


//     setup(props) {
         const compRef = ref('comp2');

        const getcomp2 = (data) => {
            compRef.value = data
        }
        
provide("key",'axay thakor')
        

//         return {
//             activeStep: comp2,
//             getcomp2,
//             compRef

//         }
//     }

// }
</script>
