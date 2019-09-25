<template>
	<div>
		<section class="section">
			<div class="container">
				  <modal name="calculate" class="modal fade">
        <div class="modal-header">
          <h5 class="modal-title">Item Clicked!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  <!--         <p>Name: {{ name }}</p>
          <p>Description: {{ description }}</p>
          <p>Price: {{ price }}</p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
  </modal>

  <!-- codes ommited -->
  <div>
      <li v-for="item in items">
          <span>{{ item.itemName }}</span>
          <span>{{ item.itemPrice }}</span>
          <span><button @click="openModal()">ShowMore</button></span>
      </li>
  </div>
  <button @click="openModal()" class="button is-primary">Open</button>
			</div>
		</section>
	</div>
</template>


<script>
	export default{
		data() {
			return{
	name: '',
       description: '',
       price: 0,
       items: [
           {itemName: 'item1', desc: 'blabla', itemPrice: 10},
           {itemName: 'item2', desc: 'lala', itemPrice: 20},
           {itemName: 'item3', desc:'aaaaa', itemPrice: 30}
       ]
			}
		},
		    methods: {
        itemClicked: function(item) {
        			  this.$modal.show('calculate');
        	this.name = item.itemName;
          this.description = item.desc;
          this.price = item.itemPrice;
        },
                openModal () {
      this.$modal.show('calculate');
    },
hideModal () {
      this.$modal.hide('calculate');
      this.$loading(false)
    }
    },
	}
</script>

<style scoped>
.calculate{
  overflow-y:auto;
}
modal{
    overflow-y:auto;
}
.modals-calculate{
  margin:20px 10px 20px 10px;
}
table tbody tr th.tracking-date{
  font-size:12px;
}
.v--modal{
  overflow-y:auto;
  overflow:auto;
}
.v--modal-overlay .v--modal-box{
  overflow:auto !important;
  height:auto;
  width:100%;
  top:100;
}
.table th {
    color: #363636;
    font-weight: 500;
}
.table thead td, .table thead th{
    font-weight:600 !important;
}

.loading{
  z-index:1000 !important;
}
.loading-text{
    font-weight:600;
    color: #e53935 !important;
    font-size: 16px !important;
}
.loading-circle{
  border-left-color:#e53935 !important;
}
.required{
  color:#e53935 ;
}
</style>