import { Module } from '@nestjs/common';
import { RondasModule } from './rondas/rondas.module';
import { TypeOrmModule } from '@nestjs/typeorm';
import { UsersModule } from './users/users.module';
import { AuthModule } from './auth/auth.module';
import { MesasModule } from './mesas/mesas.module';
import { ProductosModule } from './productos/productos.module';

@Module({
  imports: [
    RondasModule,
    TypeOrmModule.forRoot({
      type: 'mysql',
      host: 'reliable-dedication.production.pueblo.railway.app',  // Host proporcionado por Railway
      port: 3306,  // Puerto predeterminado de MySQL
      username: 'pueblo',  // Usuario proporcionado por Railway
      password: 'e36b5467-5866-4aeb-b078-a3487786165f',  // Contraseña proporcionada por Railway
      database: 'pueblodb',  // Nombre de la base de datos
      autoLoadEntities: true,
      synchronize: true,
    }),
    UsersModule,
    AuthModule,
    MesasModule,
    ProductosModule,
  ],
  controllers: [],
  providers: [],
})
export class AppModule {}
