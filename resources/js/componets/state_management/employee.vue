<template>
    <div>
      <button @click="fetchData" class="btn btn-dark">Fetch API data</button>
      <div v-if="apiData">
        <ul>
            <template v-for="apiDatas in apiData">
                <li>{{ apiDatas.user_id }}-{{ apiDatas.employee_name }}</li>
            </template>
        </ul>
      </div>
    </div>

  </template>
<script>

import { defineComponent, computed } from 'vue';
import { useStore } from 'vuex';
import {onMounted} from 'vue'

export default defineComponent({
  setup() {
    const store = useStore();
    const apiData = computed(() => {
        return store.getters.getApiData;
    });

    async function fetchData() {
      await store.dispatch('fetchApiData');
    }

    onMounted(() => {
        fetchData()
    })

    return {
      apiData,
      fetchData
    };
  }
});

</script>
