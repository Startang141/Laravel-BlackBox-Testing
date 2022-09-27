<reference types="cypress" />
describe('empty spec', () => {
    it('passes', () => {
      // cek login serta render page product
      cy.visit('http://127.0.0.1:8000/');
      cy.get(':nth-child(5) > .nav-link').click({force: true});
      cy.get('#typeEmailX-2').type('bintang@gmail.com');
      cy.get('#typePasswordX-2').type('password');
      cy.get('.btn').click({force: true});
      cy.get('.card-title').should('have.text','Bintang');
      cy.get(':nth-child(1) > .card-body > .form-horizontal > :nth-child(3) > .mb-0').should('have.text','Full Name');
      cy.get(':nth-child(5) > .sidebar-link > .me-3').click({force: true});
      
      // klik tambah produk
      cy.get('.text-end > .btn').click({force: true});

      // menambah data produk
      cy.get('#Name').type( 'Gitar Bencana');
      cy.get(':nth-child(3) > div.col-md-12 > .form-control').select('Alat Musik Petik');
      cy.get('#Description').type('Gitar Yang Akan Membawa Bencana');
      cy.get('#Price').type(20000);
      cy.get('#Stock').type(2);
      cy.get('#Rating').type(4.5);
      cy.get('#Image').selectFile('cypress/fixtures/images/gitar.jpg');
      // klik submit
      cy.get('#myForm > .btn').click({force: true});
    })
  })