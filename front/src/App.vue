<template>
	<div class="app container-fluid p-3">
		<h1 class="text-center mb-5">DEMANDES D'AUTORISATIONS D'URBANISME</h1>
		<TableComponent></TableComponent>
	</div>
</template>

<script>
import TableComponent from './components/TableComponent.vue';

export default {
	name: 'App',
	components: {
		TableComponent: TableComponent
	},
}
</script>
