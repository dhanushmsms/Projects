#include<iostream>
#include<GL/glut.h>
#include<GL/glu.h>
#include<stdio.h>
#include<stdarg.h>
#include<windows.h>
#include<string.h>

GLfloat T = 0;
GLfloat Cx=0,Cy=0,Cz=3;

void spin()
{
    T = T + 0.1;
    if(T>360)
        T = 0;
    glutPostRedisplay();

}

void stop()
{
    T = T + 1000;
    if(T>360)
        T = 0;
    glutPostRedisplay();

}

void Draw()
 {
    glClearColor(0,1,0,0);
    glClear(GL_COLOR_BUFFER_BIT|GL_DEPTH_BUFFER_BIT);
    glLoadIdentity();

    gluLookAt(Cx,Cy,Cz,0,0,0,0,1,0);

    glRotatef(T,0,1,0);

    /*headblue*/

    glPushMatrix();
        glColor3f(0,0.55,0.86);
         glTranslatef(0,0.9,-0.15);
        glutSolidSphere(0.6,10,10);
    glPopMatrix();


    /*head*/

    glPushMatrix();
        glColor3f(1,1,1);
         glTranslatef(0,0.9,0);
        glutSolidSphere(0.5,10,10);
    glPopMatrix();


    /*middle*/
    glPushMatrix();
        glColor3f(0,0.55,0.86);
        glScalef(0.8,1.0,0.8);
        glutSolidSphere(0.7,10,10);
    glPopMatrix();



     /*bell*/
     glPushMatrix();
        glColor3f(1,1,0);
        glTranslatef(0,0.5,0.32);
        glScalef(0.25,0.25,0.25);
        glutSolidSphere(0.4,10,10);
    glPopMatrix();

    /*pocket*/
    glPushMatrix();
        glColor3f(1,1,1);
        glTranslatef(0,-0.2,0.5);
        glScalef(0.5,0.35,0.25);
        glutSolidSphere(0.4,10,10);
    glPopMatrix();





    /*legs*/

    glPushMatrix();
     glColor3f(0,0.55,0.86);
        glTranslatef(-0.35,-0.5,0.1);
        glScalef(0.3,0.6,0.3);
        glutSolidCube(1);
    glPopMatrix();

    /* doremon pada*/
    glPushMatrix();
     glColor3f(1,1,1);
        glTranslatef(-0.35,-0.8,0.25);
        glScalef(0.5,0.2,0.5);
        glutSolidSphere(0.7,10,10);
    glPopMatrix();

    /*legs*/

    glPushMatrix();
     glColor3f(0,0.55,0.86);
        glTranslatef(0.35,-0.5,0.1);
        glScalef(0.3,0.6,0.3);
        glutSolidCube(1);
    glPopMatrix();

    /*doremon pada*/
    glPushMatrix();
     glColor3f(1,1,1);
        glTranslatef(0.35,-0.8,0.25);
        glScalef(0.5,0.2,0.5);
        glutSolidSphere(0.7,10,10);
    glPopMatrix();

    /*hands*/
     glPushMatrix();
     glColor3f(0,0.55,0.86);
        glTranslatef(-0.35,-0.06,0.5);
        glScalef(0.3,0.2,0.3);
        glutSolidCube(1);
    glPopMatrix();

    /*doremon hasta*/
    glPushMatrix();
    glColor3f(1,1,1);
         glTranslatef(-0.37,-0.06,0.825);
         glutSolidSphere(0.17,10,10);
        glPopMatrix();

    glPushMatrix();
     glColor3f(0,0.55,0.86);
        glTranslatef(0.35,-0.06,0.5);
        glScalef(0.3,0.2,0.3);
        glutSolidCube(1);
    glPopMatrix();

    /*doremon hasta*/
    glPushMatrix();
        glColor3f(1,1,1);
         glTranslatef(0.37,-0.06,0.825);
         glutSolidSphere(0.17,10,10);
        glPopMatrix();

        /*doracake*/
        glPushMatrix();
        glColor3f(0.8,0.75,0);
        glTranslatef(0.37,0.1,0.825);
         glutSolidSphere(0.17,10,10);
        glPopMatrix();

        glPushMatrix();
        glColor3f(0.8,0.75,0);
        glTranslatef(0.37,0.2,0.825);
         glutSolidSphere(0.17,10,10);
        glPopMatrix();

        glPushMatrix();
        glColor3f(1,1,1);
        glTranslatef(0.37,0.15,0.825);
         glutSolidSphere(0.17,10,10);
        glPopMatrix();





    /*tail*/
    glPushMatrix();
     glColor3f(1,1,1);
        glTranslatef(0,-0.3,-0.6);
        glScalef(0.4,0.4,0.4);
        glutSolidSphere(0.5,10,10);
    glPopMatrix();

    /*eyes*/
    /*first inner*/
    glPushMatrix();
         glColor3f(1,1,1);
        glTranslatef(-0.39,0.9,0.3);
        glScalef(0.2,0.2,0.2);
        glutSolidSphere(0.35,10,10);
    glPopMatrix();

    /*first outer*/
     glPushMatrix();
        glColor3f(0,0,0);
        glTranslatef(-0.3,0.9,0.25);
        glScalef(0.2,0.2,0.2);
        glutSolidSphere(0.8,10,10);
    glPopMatrix();

    /*second inner*/
    glPushMatrix();
         glColor3f(1,1,1);
        glTranslatef(0.39,0.9,0.3);
        glScalef(0.2,0.2,0.2);
        glutSolidSphere(0.35,10,10);
    glPopMatrix();

    /*second outer*/
     glPushMatrix();
        glColor3f(0,0,0);
        glTranslatef(0.3,0.9,0.25);
        glScalef(0.2,0.2,0.2);
        glutSolidSphere(0.8,10,10);
    glPopMatrix();

    glPopMatrix();

    /*nose*/
    glPushMatrix();
        glColor3f(1,0,0);
        glTranslatef(0,0.82,0.43);
        glScalef(0.4,0.2,0.4);
        glutSolidSphere(0.3,10,10);
    glPopMatrix();






    /*mouth*/
     glPushMatrix();
        glTranslatef(0,0.68,0.3);
        glScalef(0.6,0.2,0.4);
        glutSolidSphere(0.45,10,10);
    glPopMatrix();



    glutSwapBuffers();

}


void Key(unsigned char ch,int x,int y)
{
    switch(ch)
    {
        case 'x' : Cx = Cx - 0.5;   break;
        case 'X' : Cx = Cx + 0.5;   break;

        case 'y' : Cy = Cy - 0.5;   break;
        case 'Y' : Cy = Cy + 0.5;   break;

        case 'z' : Cz = Cz - 0.5;   break;
        case 'Z' : Cz = Cz + 0.5;   break;

        case 'd' : glutIdleFunc(spin); break;
        case 'D' : glutIdleFunc(spin); break;
        case 'k' : glutIdleFunc(stop); break;
        case 'K' : glutIdleFunc(stop); break;


    }
}

void MyInit()
{
    glEnable(GL_DEPTH_TEST);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    glFrustum(-1,1,-1,1,2,10);
    glMatrixMode(GL_MODELVIEW);
}


int main(int argC ,char *argV[])
{
    glutInit(&argC,argV);

    glutInitWindowSize(600,600);
    glutInitWindowPosition(50,50);
    glutInitDisplayMode(GLUT_RGB|GLUT_DOUBLE|GLUT_DEPTH);
    glutCreateWindow("project");
    MyInit();

    glutDisplayFunc(Draw);
    glutIdleFunc(spin);
    glutKeyboardFunc(Key);

    glutMainLoop();
    return 0;


}
