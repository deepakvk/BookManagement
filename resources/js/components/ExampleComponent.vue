<template>
<div class="d-flex flex-column sticky-footer-wrapper">
    <main class="flex-fill">    
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark" role="navigation">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-brand mr-auto">Books Management</div>
			
			</div>
		</nav>
		<section>
			<div class="container mt-3">
				<div class="row">
					<div class="col-lg-3 col-md-12" v-for="{id, bookTitle} in books"
						 :key="id">
						<div class="item">
							<img src="/images/book.jpg" alt="img">
							<h3>{{ bookTitle }}</h3>
													
						</div>
					</div>
				</div>
			</div>
		</section>
    </main>

    <footer class="navbar-default navbar-bottom navbar-dark bg-dark">
      <div class="container-fluid">
            <p class="text-center nav-bar mb-0">Checkout repository at <a href="https://github.com/deepakvk/BookManagement" target="_blank">
              https://github.com/deepakvk/BookManagement
            </a></p>
      </div>
    </footer>
</div>
</template>



<!--<template>
   <div class="card">
        <div class="card-header">Books Management</div>
        <div class="card-body">
            
                <ul>
				<li
				 v-for="{bookId, bookTitle} in books"
				 :key="bookId"
				>{{ bookTitle }}
				</li></ul>
            </div>
        </div>
    </div>
</template>-->

<script>
    export default {
		
		data() {
            return {
                books: null,
				isNavOpen: false,
				token: '96be1644f5a70833797bbdcd91c3147bb54821c429655d0e72b8ea7ccaf5f698178900650d2ecc88'
            }
        },
		
        mounted() {
            /*axios.create({
				headers: {
					'Content-Type': 'application/json',
					'Authorization': 'Bearer '+this.token
				}
			})*/
			axios.get('/booklists')
                .then(response => {
				console.log(response.data.books);
                this.books = response.data.books;
            });

        },
		methods: {
			toggleNavbar() {
			this.isNavOpen = !this.isNavOpen
    }
  }
    }
</script> 
<style>
  #reset-store-panel {
    position: fixed; bottom: 0px; right: 0px;
  }
  body, .sticky-footer-wrapper {
     min-height:100vh;
  }
  .flex-fill {
     flex:1 1 auto;	 
    text-align: center;
  }
  footer {
    height: 40px;
    color: #666;
    padding: 10px 0 10px 0;
    font-size: 85%;
  }
  footer a {
    color: #999;
  }
  footer a:hover {
    color: #efefef;
  }
  @media (max-width: 576px) {
    footer {
      height: 50px;
    }
  }
  .item {
    border: 1px solid #d5d5d5;
    padding: 36px 10px;
    cursor: pointer;
    position: relative;
	}
	.item img {
    margin-bottom: 15px;
    max-width: 100%;
	}
	section {
    float: left;
    width: 100%;
}
</style>
