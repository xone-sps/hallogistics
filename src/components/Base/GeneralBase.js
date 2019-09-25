import Vue from 'vue'
import {mapActions, mapGetters, mapMutations, mapState} from 'vuex'

export default Vue.extend({
    components: {},
    data() {
        return {

        }
    },
    computed: {
        ...mapState(['isMobile']),
    },
    watch: {
        query: function (n, o) {
            this.isTyped = true;
            if (n === '' && o !== '') {
                this.getItems();
            }
        }
    },
    methods: {
        ...mapMutations([]),
        ...mapActions(['setPageTitle']),
        /***@Posts */
        getDetail(type, data) {
            this.Route({name: `${type}-single`, params: {id: data.id}});
        },

        isNotFound() {
            return this.paginate.data.length <= 0 && this.isSearch;
        },

        paginateNavigator(p) {
            this.isNavigator = true; //set to true to tell the request this is navigator action
            this.paginate.current_page = p.pageNo; //set current page next or prev page for pagination
            this.getItems();
        },
        prevPage(pageNo) {
            if (this.paginate.current_page === 1) return;
            if (pageNo < 1) pageNo = 1;
            if (this.paginate.current_page === pageNo) return;
            this.paginateNavigator({pageNo, dr: 'prev'});
        },
        nextPage(pageNo) {
            if (this.paginate.current_page === this.paginate.last_page) return;
            if (pageNo > this.paginate.lastPage) pageNo = this.paginate.lastPage;
            if (this.paginate.current_page === pageNo) return;
            this.paginateNavigator({pageNo, dr: 'next'});
        },

        shouldLoading(type) {
            return this.validated().loading_search_posts && !this.postsData[type].posts.data
                || this.validated().loading_search_posts && this.isTyped;
        },
        /***@Posts */
        /***@SinglePost*/
        setItem(data) {
        },
        shouldLoadingSingle(type) {
            return this.validated().loading_single_posts && !this.singlePostsData[type].data.id
                || this.validated().loading_single_posts && this.singlePostsData[type].data.id !== this.$utils.toInt(this.singleId)
        },
        sharer(w, type, data, link) {
            let res = this.baseUrl;
            switch (w) {
                case 'fb': {
                    res = `https://www.facebook.com/sharer/sharer.php?u=${link}`;
                    break;
                }
                case 'twitter': {
                    res = `https://twitter.com/share?url=${link}&amp;text=${this.$utils.sub(this.$utils.strip(data.title), 120)}, ${type} - ${this.s['site_name']}&amp;hashtags=${this.s['site_name']}`;
                    break;
                }
            }
            return res;
        }
        /***@SinglePost*/
    },
    created() {
        this.getItems = this.debounce(this.getItems, 150);
    }
});

