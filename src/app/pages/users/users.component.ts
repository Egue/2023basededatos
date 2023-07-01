import { Component } from '@angular/core';
import { UserService } from './user.service';
import {FormBuilder , Validators} from '@angular/forms';
@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent {

  public listUser:any[] = [];

  public form = this.fb.group({
    username: '',
    password: '',
    email: '',
    titulo:''
  })
  public constructor(private userService:UserService, private fb:FormBuilder){}

  getListUser()
  {
    this.userService.userFindAll().subscribe((resp:any) =>{
      
      this.listUser = resp.response;
    })
  }

  save()
  {
    this.form.get("titulo")?.setValue("usercrear");

    this.userService.userSave(this.form.value).subscribe(() => {
        this.getListUser();
        this.form.reset();
    })
  }
}
