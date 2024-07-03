import { defineStore } from "pinia";

export const useDetailStore = defineStore("detail", {
    state: () => ({
        selectedLibrary: null,
        librarySelected: false,
        librarys: [],
        pieceFetchError: null,
        loading: false,
    }),
    actions: {
        clear() {
            this.selectedLibrary = null;
            this.librarySelected = false;
            this.loading = false;
        },
        setSelectedLibrary(payload) {
            console.log(payload);
            this.selectedLibrary = payload;
            if (payload) {
                this.librarySelected = true;
            } else {
                this.librarySelected = false;
            }
        },
    },
});
