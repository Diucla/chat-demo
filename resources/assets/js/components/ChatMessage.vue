<template>

    <div class="chat-mssage p-2 mb-0">

        <p class="mb-2"> {{ message.message }} </p>
        <small class="laranja-text">{{ message.user.name }}</small>
        <hr>

    </div>


</template>

<script>
    export default{
        props:['message'],
    }
</script>

<sctyle lang="css">

</sctyle>