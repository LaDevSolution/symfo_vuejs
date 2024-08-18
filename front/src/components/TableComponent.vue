<template>
    <div id="filters_row" class="mb-3">
        <input type="text" v-model="filters.text" placeholder="Rechercher" class="mb-2 ms-5">
        <button type=button disabled class="btn btn-outline-secondary mb-2">
            <font-awesome-icon :icon="['fas', 'magnifying-glass']"/>
        </button>
        <input type="date" v-model="filters.date" class="mb-2 ms-5">
        <button type=button @click="fetchData" class="btn btn-outline-secondary mb-2 ms-3">
            <font-awesome-icon :icon="['fas', 'rotate-right']" />
        </button>
        <button type=button @click="fetchFilteredData" class="btn btn-outline-secondary mb-2 ms-3">
            <font-awesome-icon :icon="['fas', 'right-left']" class="me-2"/>Afficher les autorisations d'urbanisme
        </button>
    </div>
    <div style="max-height: 70vh; overflow-y: auto;">
        <table class="table table-striped">
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
                <tr v-if="datas.length === 0">
                    <td colspan="7" class="text-center">Aucune demande d'autorisation d'urbanisme ne correspond à votre recherche.</td>
                </tr>
                <tr v-else v-for="data in datas" :key="data.id">
                    <td class="fw-bold">{{ data.reference }}</td>
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
			datas: [],
            filters: {
				text: '',
				date: ''
			}
		}
	},
	mounted() {
        this.fetchData();
	},
    methods : {
        fetchData() {
            this.filters.date = '';
            this.filters.text ='';
            axios.get('http://srv-dev-melissa:8000')
                .then(response => this.datas = response.data);
        },
        fetchFilteredData() {
            axios.post('http://srv-dev-melissa:8000/filters', this.filters)
                .then(response => this.datas = response.data)
                .catch(error => {
                    console.error("Erreur lors de la récupération des données:", error);
                });
        },
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
    },
    computed: {
        filteredDatas() {
            return this.filters;
        }
    }
}
</script>

<style scoped>
table{
    border : 2px solid rgba(0, 0, 0, 0.1);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
}
thead{
    border-bottom: 2px solid rgba(0, 0, 0, 0.1);
    position: sticky;
    top: 0;
    z-index: 1;
}

#filters_row input, #filters_row input:focus {
    border : none;
    border-bottom: dimgrey 1px solid;
    outline: none;
    width: 200px;
}

#filters_row button{
    border: rgba(0, 0, 0, 0.2) 1px solid;
    color: rgba(0, 0, 0, 0.7);
    font-weight: bold;
    border-radius : 15px;
}

#filters_row button:disabled {
    opacity: 1;  
}

</style>
