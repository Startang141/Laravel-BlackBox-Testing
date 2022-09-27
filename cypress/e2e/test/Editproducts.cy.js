/// <reference types="cypress" />
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
      
      // klik edit produk
      cy.get(':nth-child(8) > :nth-child(9) > form > .btn-info').click();
      
      //render page edit
      cy.get(':nth-child(3) > .mb-0').contains('Nama').and('be.visible');
      cy.get(':nth-child(4) > .mb-0').contains('Category').and('be.visible');
      cy.get(':nth-child(5) > .mb-0').contains('Deskripsi').and('be.visible');
      cy.get(':nth-child(6) > .mb-0').contains('Harga').and('be.visible');
      cy.get(':nth-child(7) > .mb-0').contains('Stok').and('be.visible');
      cy.get(':nth-child(8) > .mb-0').contains('Rating').and('be.visible');
      cy.get(':nth-child(9) > .mb-0').contains('Image').and('be.visible');

      // mengedit data produk
      cy.get('#Name').clear();
      cy.get('#Name').type('Drum Bencana');
      cy.get(':nth-child(4) > div.col-md-12 > .form-control').select('Alat Musik Pukul')
      cy.get('#Description').clear();
      cy.get('#Description').type('Drum Yang Akan Membuat Suara Menjadi Seperti Rihana');
      cy.get('#Price').clear();
      cy.get('#Price').type(1200000);
      cy.get('#Stock').clear();
      cy.get('#Stock').type(1);
      cy.get('#Rating').clear();
      cy.get('#Rating').type(5);
      cy.get('#Image').selectFile('cypress/fixtures/images/drum.png');
    // Klik Submit
      cy.get('#myForm > .btn').click({force: true});
    })
  })