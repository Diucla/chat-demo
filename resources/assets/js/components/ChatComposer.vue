<template  lang="html">

    <div class="chat-composer">

        <div class="form-group col-xs-10">
          <label for="comment">{{user}}:</label>
          <textarea  placeholder="Start Typing here your message..." class="form-control" rows="4" id="comment"></textarea>
          <button class="btn btn-primary">Send</button>
        </div>

    </div>


</template>

<script>
    export default{

        data(){
            return{
                message : "This is some message ",
                user : "John Doe"
            }
        }

    }
</script>

<sctyle lang="css">

    .chat-messsage {

    }



</sctyle>