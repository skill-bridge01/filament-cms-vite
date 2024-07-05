import axios from 'axios'

class HttpService {
    constructor(apiUrl) {
        this.apiUrl = apiUrl
        this.createAxiosInstance()
    }

    createAxiosInstance() {
        this.axios = axios.create()
    }

   

    get(url, config) {
        return this.axios.get(this.apiUrl + url, config)
    }

    put(url, payload, config) {
        return this.axios.put(this.apiUrl + url, payload, config)
    }

    post(url, payload, config) {
        return this.axios.post(this.apiUrl + url, payload, config)
    }

    patch(url, payload, config) {
        return this.axios.patch(this.apiUrl + url, payload, config)
    }

    delete(url, config) {
        return this.axios.delete(this.apiUrl + url, config)
    }
}

export const http = new HttpService('/api')
