<template>
    <div>
        <h1>Lista de Usuários</h1>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Filtrar a lista abaixo" v-model="filterTerm">
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th><a href="#" @click="sort($event, 'name')">Nome</a></th>
                    <th><a href="#" @click="sort($event, 'email')">E-mail</a></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="u in list.data" :key="u.id">
                    <td>{{ u.name }}</td>
                    <td>{{ u.email }}</td>
                </tr>
            </tbody>
        </table>
        <pagination :data="list" @pagination-change-page="paginate"></pagination>
    </div>
</template>

<script>
    export default {
        props: ['users'],
        data() {
            return {
                filterTerm: '',
                list: {},
                sortProperty: 'name',
                sortDirection: 'asc'
            }
        },
        computed: {
            datasource() {
                const self = this;
                // const result = self.filterTerm ? self.list.filter(
                //     u  => u.name.toLowerCase().indexOf(self.filterTerm.toLowerCase()) !== -1
                // ) : self.list;
                const result = self.filterTerm ? self.list.data.filter(
                    u  => u.name.toLowerCase().indexOf(self.filterTerm.toLowerCase()) !== -1
                ) : self.list;

                return _.orderBy(result, this.sortProperty, this.sortDirection);
            }
        },
        methods: {
            paginate(page = 1) {
                this.$http.get(`api/users/list?page=${page}`).then(req => this.list = req.data);
            },
            sort(ev, property) {
                ev.preventDefault();
                this.sortProperty = property;
                this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
            }
        },
        mounted() {
            // this.list = this.users;
            this.paginate();
        }
    }
</script>

<style>

</style>
