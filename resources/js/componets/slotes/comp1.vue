<template>
    <comp2>
        <template v-slot:slot1>
            <h1>Ak</h1>
        </template>
        <template v-slot:slot2>
            <h1> Bk </h1>
        </template>
        <template v-slot:slot3>
            <h1> Ck</h1>
        </template>
    </comp2>
    <comp2>
        <template v-slot:slot1 >
            <h1 class="mt-5">Akshay</h1>
        </template> 
        <template v-slot:slot2>
            <h1> Bhavik </h1>
        </template>
        <template v-slot:slot3>
            <h1>pravin</h1>
        </template>
    </comp2>
    <h1 class="text-success mt-5"> axay </h1>
</template>
<script>
import comp2 from '../slotes/comp2.vue'

export default {


    components: {
        comp2
    }

}
</script>