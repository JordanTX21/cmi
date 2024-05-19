import axios from 'axios';

export default class Request {
    constructor(){
        this.domain = 'http://127.0.0.1:8000'
        this.prefix = 'api/v1'
    }

    async get(endpoint){
        try{
            const response = await axios.get(`${this.domain}/${prefix}/${endpoint}`)
            return response.data
        }catch(e){
            return {success:false,message:'Ocurrió un error interno.',error: e}
        }
    }

    async post(endpoint,data){
        try{
            const response = await axios.post(`${this.domain}/${prefix}/${endpoint}`,data)
            return response.data
        }catch(e){
            return {success:false,message:'Ocurrió un error interno.',error: e}
        }
    }

    async put(endpoint,data){
        try{
            const response = await axios.put(`${this.domain}/${prefix}/${endpoint}`,data)
            return response.data
        }catch(e){
            return {success:false,message:'Ocurrió un error interno.',error: e}
        }
    }

    async delete(endpoint){
        try{
            const response = await axios.delete(`${this.domain}/${prefix}/${endpoint}`)
            return response.data
        }catch(e){
            return {success:false,message:'Ocurrió un error interno.',error: e}
        }
    }
}