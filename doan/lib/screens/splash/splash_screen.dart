import 'package:doan/screens/splash/components/body.dart';
import 'package:flutter/material.dart';
import 'package:doan/size_config.dart';

class SplashScreen extends StatelessWidget {
  static String routeName = "/spplash";
  @override
  Widget build(BuildContext context) {
    SizeConfig().init(context);
    return Scaffold(
      body: Body(),
    );
  }
}
