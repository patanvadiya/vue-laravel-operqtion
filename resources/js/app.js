import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap/dist/js/bootstrap.js"
import i18nPlugin from './componets/plugins/i18n'
import {
    store
} from './componets/state_management/store/store.js'
import {
    createApp
} from 'vue';

import routes from "./router/index"

import appa from './componets/App.vue'




const app = createApp(appa).use(routes).use(store).mount("#app")

// app.use(i18nPlugin, {
//     greetings: {
//         hello: 'Bonjour!'
//     }
// })