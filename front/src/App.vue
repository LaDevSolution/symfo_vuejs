<template>
	<div class="app container-fluid">
		<h1 class="text-center py-5">DEMANDES D'AUTORISATIONS D'URBANISME</h1>

		<TableComponent></TableComponent>
	</div>



	<AuthorizationRequests msg="Welcome to Your Vue.js App" />
</template>

<script>
import AuthorizationRequests from './components/AuthorizationRequests.vue'
import TableComponent from './components/TableComponent.vue';

export default {
	name: 'App',
	components: {
		AuthorizationRequests: AuthorizationRequests,
		TableComponent: TableComponent
	},
}
</script>
