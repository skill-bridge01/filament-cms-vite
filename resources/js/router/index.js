import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    name: "Canary",
    component: () => import("../layout/index.vue"),
    redirect: "/home",
    // meta: {
    //   title: "Home",
    // },

    children: [
      {
        path: "home",
        name: "Home",
        component: () => import("../views/Home/index.vue"),
        meta: {
          title: "",
        },
      },
      {
        path: "/services",
        name: "Our Services",
        component: () => import("../views/Services/index.vue"),
        meta: {
          title: "",
        },
      },
      {
        path: "/library",
        name: "Resource Library",
        component: () => import("../views/Library/index.vue"),
        meta: {
          title: "",
        },
      },
      {
        path: "/details",
        name: "Details",
        component: () => import("../views/Library/components/Details.vue"),
        meta: {
          title: "",
        },
      },
      {
        path: "/articles/full",
        name: "Full",
        component: () => import("../views/Articles/components/Full.vue"),
        meta: {
          title: "",
        },
      },
      {
        path: "/articles",
        name: "Articles",
        component: () => import("../views/Articles/index.vue"),
        meta: {
          title: "article",
        },
      },
      {
        path: "/faq",
        name: "FAQ",
        component: () => import("../views/FAQ/index.vue"),
        meta: {
          title: "faq",
        },
      },
      {
        path: "/about",
        name: "About",
        component: () => import("../views/About/index.vue"),
        meta: {
          title: "about",
        },
      },
      {
        path: "/contact",
        name: "Contact",
        component: () => import("../views/Contact/index.vue"),
        meta: {
          title: "Contact",
        },
      },

      {
        path: "/pagination",
        name: "Pagination",
        component: () => import("../views/Pagination/index.vue"),
        meta: {
          title: "",
        },
      },
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  scrollBehavior(to, from, savedPosition) {
    return { left: 0, top: 0 };
  },
  routes,
});

export default router;
