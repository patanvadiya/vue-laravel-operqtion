import {
    createRouter,
    createWebHistory,
} from "vue-router";

import parent_to_child from "../componets/parent_to_child/comp1.vue"
import child_to_parent from "../componets/child_to_perent/comp1.vue"
import one_to_another_file_send_data from "../componets/one_to_another_file_send_data/comp1.vue"
import second_another_file_send_data from "../componets/one_to_another_file_send_data/comp2.vue"
import slote from "../componets/slotes/comp1.vue"
import dynamic_component from "../componets/dynamicComponets/comp1.vue"
import non_props from "../componets/non_props/comp1.vue"
import mixed from "../componets/mixed/comp1.vue"
import functions from "../componets/functions/comp1.vue"
import employee from "../componets/state_management/employee.vue"
import not_found from "../componets/404_not_found.vue"

import routess from "./user";

const routes = [

    {
        name: "parent_to_child",
        path: "/parent-to-child",
        component: parent_to_child
    }, {
        name: "child_to_parent",
        path: "/child-to-perent",
        component: child_to_parent
    }, {
        name: "one_to_another_file_send_data",
        path: "/one-to-another-file-send-data",
        component: one_to_another_file_send_data,
        props: true,
    }, {
        path: "/second_another_file_send_data/:id",
        name: "second_another_file_send_data",
        component: second_another_file_send_data,
        props: true,
    }, {
        path: "/slote",
        name: "slotes",
        component: slote,

    }, {
        path: "/dynamic-component",
        name: "dynamic_component",
        component: dynamic_component,

    }, {
        path: "/non-props",
        name: "non_props",
        component: non_props,

    },

    {
        path: "/mixed",
        name: "mixed",
        component: mixed,

    }, {
        path: "/function",
        name: "function",
        component: functions,

    }, {
        path: "/employee",
        name: "employee",
        component: employee,

    }, {
        path: '/:pathMatch(.*)*',
        component: not_found,
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes,

});



export default router