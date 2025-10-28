import { Component, signal } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.html',
  
//ver si funciona
template: `
    <app-empleado></app-empleado>
  `, // <--- REEMPLAZA el contenido del template


  standalone: false,
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('frontend-empleados');
}
