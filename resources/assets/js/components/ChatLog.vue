<template>

	<div class="chat-log col-md-10">

		<div>
			<chat-message v-for="message in messages" :message></chat-message>
			<hr>
		</div>



	</div>


</template>

<script>
export default{

	data(){
		return{

			messages:[

				{
					message: 'Hey!',
					user: "John Doe"
				},

				{
					message: 'Hey!',
					user: "John Doe"
				}

			]

		}
	}



}
</script>

<sctyle lang="css">

</sctyle>