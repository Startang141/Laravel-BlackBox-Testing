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
      
      // klik delete produk
      cy.get(':nth-child(8) > :nth-child(9) > form > .btn-danger').click();
      
    })
  })