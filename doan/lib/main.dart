import 'package:doan/constants.dart';
import 'package:doan/screens/splash/splash_screen.dart';
import 'package:doan/screens/thong_tin_ca_nhan/profile_screen.dart';
import 'package:doan/theme.dart';
import 'package:flutter/material.dart';
import 'package:doan/routs.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Flutter Demo',
      theme: theme(),
      //home: SplashScreen(),
      initialRoute: SplashScreen.routeName,
      routes: routes,
    );
  }
}
