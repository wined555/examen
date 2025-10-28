import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'; 
import { Observable } from 'rxjs';
import { Empleado } from '../empleado'; // <-- Importación a la raíz /app

@Injectable({
  providedIn: 'root'
})
export class EmpleadoService {
  private apiUrl = 'http://localhost:8000/api/empleados'; 

  constructor(private http: HttpClient) { }
// ... (métodos getEmpleados y crearEmpleado)
// ...
}