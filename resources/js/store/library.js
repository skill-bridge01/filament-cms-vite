import { defineStore } from "pinia";
import { libraryService } from "@/services";
import axios from "axios";

export const useLibraryStore = defineStore("library", {
    state: () => ({
        selectedLibrary: null,
        librarySelected: false,
        librarys: [],
        libraryFetchError: null,
        loading: false,
    }),
    actions: {
        clear() {
            this.selectedLibrary = null;
            this.librarySelected = false;
            this.loading = false;
        },
        setSelectedLibrary(payload) {
            console.log(payload.id);
            this.selectedLibrary = payload;
            if (payload) {
                this.librarySelected = true;
            } else {
                this.librarySelected = false;
            }
        },

        fetch() {
            
            this.loading = true;
            libraryService
                .getList()
                .then((res) => {
                    console.log("LIBRS_OK", res.data.librarys)
                    this.librarys = res.data.librarys;
                })
                .catch((err) => {
                    console.log("LIBRS_ERR")
                    this.libraryFetchError = err;
                })
                .finally(() => {
                    this.loading = false;
                });
        },

        fetchLocalData() {
            axios
                .get(`data-sources/pieces.json`, {
                    baseURL: window.location.origin,
                })
                .then((r) => {
                    console.log(r.data);
                    this.pieces = r.data;
                });
        },

        async create(title) {
            this.loading = true;
            try {
                const res = await pieceService.create(title);
                if (res.data.piece) {
                    this.pieces.push(res.data.piece);
                }

                return res.data;
            } catch (error) {
                this.pieceFetchError = error;
                return error;
            } finally {
                this.loading = false;
            }
        },

        async edit(pieceId, title) {
            this.loading = true;
            try {
                const res = await pieceService.edit(pieceId, title);
                const pieceIndex = this.pieces.findIndex(
                    (p) => p.id === pieceId
                );
                this.pieces[pieceIndex] = res.data;
                return true;
            } catch (error) {
                this.pieceFetchError = error;
                return error;
            } finally {
                this.loading = false;
            }
        },
        async delete(pieceId) {
            this.loading = true;
            try {
                await pieceService.delete(pieceId);
                console.log("pieces::", this.pieces, pieceId)
                this.pieces = this.pieces.filter((p) => p.id !== pieceId);
                return true;
            } catch (error) {
                this.pieceFetchError = error;
                return error;
            } finally {
                this.loading = false;
            }
        },
    },
});
