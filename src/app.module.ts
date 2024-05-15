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
      host: 'localhost',
      port: 3309,
      username: 'aldair',
      password: 'root',
      database: 'pueblodb',
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
