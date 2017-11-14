<template  lang="html">

    <div class="chat-composer">

        <div class="form-group col-xs-10">
          <label for="comment">Write a Message</label>
          <textarea placeholder="Start Typing here your message..." class="form-control mb-4" rows="4" id="comment" v-model="messageText" @keyup.enter="sendMessage"></textarea>
          <button @click="sendMessage" class="btn btn-primary pull-right px-5">Send</button>
        </div>

    </div>


</template>

<script>
    export default{

        data(){
            return{
                messageText:'Default'
            }
        },

        methods:{
            sendMessage(){
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: "John De"
                })
                this.messageText =''
            }
        }

    }
</script>

<sctyle lang="css">

    .chat-messsage {

    }



</sctyle>