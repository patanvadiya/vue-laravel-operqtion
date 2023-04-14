<template>
    
    <Button @click="addData" class="btn btn-dark">Add</Button>
    <Button @click="subData" class="btn btn-primary">sub</Button>
</template>
<script setup>
import {onMounted} from 'vue';
import {allOpt} from './opt_function'

const {add,sub} = allOpt();

// console.log(add(10,20));

const addData = ()=>{
        add(10,20)
}

const subData = ()=>{
        sub(10,20)
}

</script>