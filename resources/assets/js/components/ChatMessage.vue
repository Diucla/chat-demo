<template>

    <div class="chat-mssage p-2 mb-4">

        <p class="mb-4"> {{ message }} </p>
        <small>{{ user }}</small>

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

</sctyle>