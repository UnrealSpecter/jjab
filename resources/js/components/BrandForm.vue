<template>

    <div>

        <!-- STEL JE VRAAG -->
        <brand-title id="mail">Stel je vraag!</brand-title>

        <form action="" method="post" class="flex flex-col justify-center items-end">

            <!-- CSRF TOKEN -->
            <input type="hidden" name="_token" :value="csrf">

            <!-- EMAIL -->
            <input type="email" data-emergence="hidden" data-animation="animated fadeInUp" @keydown="clearError('email')" v-model="data.email" name="data[email]" value="{ data.email }" class="placeholder-jjab-purple-placeholder outline-none w-full tracking-5px mb-10 shadow-md p-10 text-2.5rem text-jjab-purple leading-none bg-white anton rounded-jjab overflow-hidden" placeholder="email">
            <p v-if="errors.email" class="w-full p-12 text-white shadow-md rounded-jjab bg-jjab-blue anton mb-10 flex-center text-2.5rem">
                <span class="fa fa-exclamation-circle mr-5 text-3rem"></span>Vul een geldig emailadres in.
            </p>

            <!-- CONTENT -->
            <textarea data-emergence="hidden" data-animation="animated fadeInUp" v-model="data.content" @keydown="clearError('content')" name="data[content]" value="{ data.content }" class="placeholder-jjab-purple-placeholder outline-none w-full tracking-5px mb-10 shadow-md p-10 text-2.5rem text-jjab-purple bg-white leading-none anton rounded-jjab overflow-hidden h-200px" placeholder="stel je vraag!"></textarea>
            <p v-if="errors.content" class="w-full p-12 text-white shadow-md rounded-jjab bg-jjab-blue anton mb-10 flex-center text-2.5rem">
                <span class="fa fa-exclamation-circle mr-5 text-3rem"></span>Dit veld mag niet leeg zijn.
            </p>

            <!-- SUBMIT -->
            <input @click.prevent="submit()" data-emergence="hidden" data-animation="animated fadeInUp" class="transition-all-250ms hover:bg-jjab-purple-hover hover:shadow-xl placeholder-jjab-purple outline-none w-1/4 cursor-pointer mb-10 tracking-5px shadow-md p-10 text-4rem tracking-wide leading-none text-white bg-jjab-purple anton rounded-jjab overflow-hidden" type="submit" value="help!">

        </form>

    </div>

</template>

<script>
    export default {
        data: function(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                data: {
                    email: '',
                    content: '',
                },
                errors: {
                },
            }
        },
        methods: {
            submit: function(){

                if(this.validate()){
                    this.send();
                }

            },
            validate: function(){

                this.errors = {};

                for (var property in this.data) {
                    if (this.data[property] === "") {
                        this.errors[property] = property + "";
                    }
                }

                var errorCount = Object.keys(this.errors).length;

                return ( errorCount >= 1 ? false : true);

            },
            send: function(){

                axios.post('/mail', {
                    email: this.data.email,
                    content: this.data.content
                })
                .then(function (response) {
                    if(response.data){
                        //success
                    }
                })
                .catch(function(error) {
                    //error
                });
            },
            clearError: function(key){
                this.errors[key] = "";
            }
        }
    }
</script>
