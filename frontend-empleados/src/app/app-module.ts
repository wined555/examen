import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
// ¡IMPORTANTE! ELIMINAR la línea: import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';           // <-- Necesario para ngModel

import { AppComponent } from './app.component';
import { EmpleadoComponent } from './empleado/empleado.component'; 

@NgModule({
  declarations: [
    AppComponent,
    EmpleadoComponent
  ],
  imports: [
    BrowserModule,
    // ELIMINAR HttpClientModule de aquí.
    FormsModule       // <-- Mantener
  ],
  providers: [], // <-- Dejar vacío
  bootstrap: [AppComponent]
})
export class AppModule { }