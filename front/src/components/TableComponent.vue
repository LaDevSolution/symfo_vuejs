<template>
    <div>
        <table class="table table-striped" style="max-height: 300px; overflow-y: auto;">
            <thead>
                <tr>
                    <th>Référence</th>
                    <th>Déposé le</th>
                    <th>Demandeur</th>
                    <th>Surface(m²)</th>
                    <th>Nature des travaux</th>
                    <th>Adresse du terrain</th>
                    <th>Ref. cadastrales</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in datas" :key="data.id">
                    <td>{{ data.reference }}</td>
                    <td>{{ formattedDate(data.dateDepot) }}</td>
                    <td>{{ data.dosDnmT }}</td>
                    <td>{{ Math.round(data.surfCc) }}</td>
                    <td v-html="sanitizingDatas(data.nature)"></td>
                    <td>{{ data.bieAdresse }}</td>
                    <td>{{ data.bieCadT }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';
import DOMPurify from 'dompurify';

export default {
	name: 'TableComponent',
    data() {
		return {
			datas: []
		}
	},
	mounted() {
		axios.get('http://srv-dev-melissa:8000')
			.then(response => this.datas = response.data)
	},
    methods : {
        formattedDate(date){
            let dateFormatted = new Date(date.date);
            const day = String(dateFormatted.getDate()).padStart(2, '0');
            const month = String(dateFormatted.getMonth() + 1).padStart(2, '0');
            const year = dateFormatted.getFullYear();
            return `${day}/${month}/${year}`;
        },
        sanitizingDatas(data) {
            return DOMPurify.sanitize(data);
        }
    }
}
</script>

<style scoped>
table{
    
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}
thead{
    border-bottom: 3px solid rgba(0, 0, 0, 0.1);
    border-top: 3px solid rgba(0, 0, 0, 0.1);
}
</style>
