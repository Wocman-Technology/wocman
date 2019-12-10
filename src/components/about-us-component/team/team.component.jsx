import React from "react";
import {  MDBRow, MDBCol, MDBCard, MDBCardBody, MDBIcon } from "mdbreact";
import Founder from '../../../assets/founder.jpg'
import Techlead from '../../../assets/techlead.jpg'
import Designlead from '../../../assets/design-lead.jpg'
import Backend from '../../../assets/backend-lead.jpg'
import {TeamWrapper} from './team.styles'


export const Team = () => {
  return (
    <TeamWrapper>
    <MDBCard className="my-5 px-5 pb-5 text-center">
        <MDBCardBody>
          <h2 className="h1-responsive font-weight-bold my-5">
            The Amazing Team
          </h2>
          <MDBRow>
            <MDBCol lg="3" md="6" className="mb-lg-0 mb-5">
              <img
                tag="img"
                src={Founder}
                className="rounded-circle z-depth-1 img-fluid"
                alt="Sample avatar"
              />
              <h5 className="font-weight-bold mt-4 mb-3">Olalekan Ilesanmi</h5>
              <p className="text-uppercase font-weight-bold grey-text">Founder</p>
              <ul className="list-unstyled mb-0">
                <a href="https://slack-redir.net/link?url=https%3A%2F%2Fwww.facebook.com%2Filesanmi.olalekan1" className="p-2 fa-lg">
                  <MDBIcon fab icon="facebook-f" className="blue-text" />
                </a>
                <a href="https://twitter.com/lekuwe?s=08" className="p-2 fa-lg">
                  <MDBIcon fab icon="twitter" className="blue-text" />
                </a>
                <a href="https://slack-redir.net/link?url=https%3A%2F%2Fwww.linkedin.com%2Fin%2Folalekan-ilesanmi-95766756" className="p-2 fa-lg">
                  <MDBIcon fab icon="linkedin" className="blue-text" />
                </a>
              </ul>
            </MDBCol>

            <MDBCol lg="3" md="6" className="mb-lg-0 mb-5">
              <img
                tag="img"
                src={Techlead}
                className="rounded-circle z-depth-1 img-fluid"
                alt="Sample avatar"
              />
              <h5 className="font-weight-bold mt-4 mb-3">Abasifreke Ekwere</h5>
              <p className="text-uppercase font-weight-bold grey-text">Tech Lead</p>
              <ul className="list-unstyled mb-0">
                <a href="https://www.facebook.com/abasifreke.ekwere" className="p-2 fa-lg">
                  <MDBIcon fab icon="facebook-f" className="blue-text" />
                </a>
                <a href="https://www.twitter.com/KingAbesh_" className="p-2 fa-lg">
                  <MDBIcon fab icon="twitter" className="blue-text" />
                </a>
                <a href="www.linkedin.com/in/abasifreke-ekwere-743b42154" className="p-2 fa-lg">
                  <MDBIcon fab icon="linkedin" className="blue-text" />
                </a>  
                <a href="https://www.github.com/KingAbesh" className="p-2 fa-lg">
                  <MDBIcon fab icon="github" className="blue-text" />
                </a>
              </ul>
            </MDBCol>

            <MDBCol lg="3" md="6" className="mb-lg-0 mb-5">
              <img
                tag="img"
                src={Designlead}
                className="rounded-circle z-depth-1 img-fluid"
                alt="Sample avatar"
              />
              <h5 className="font-weight-bold mt-4 mb-3">Lasisi Sodiq</h5>
              <p className="text-uppercase font-weight-bold grey-text">Design Lead</p>
              <ul className="list-unstyled mb-0">
                <a href="https://twitter.com/LvzyEngine" className="p-2 fa-lg">
                  <MDBIcon fab icon="twitter" className="blue-text" />
                </a>
                <a href="https://www.linkedin.com/in/lasisi-sodiq-301791160/" className="p-2 fa-lg">
                  <MDBIcon fab icon="linkedin" className="blue-text" />
                </a>  
                <a href="https://slack-redir.net/link?url=https%3A%2F%2Fwww.instagram.com%2Flvzylass%2F" className="p-2 fa-lg">
                  <MDBIcon fab icon="instagram" className="blue-text" />
                </a>
                <a href="https://www.behance.net/sodiqlasisi" className="p-2 fa-lg">
                  <MDBIcon fab icon="behance" className="blue-text" />
                </a>
              </ul>
            </MDBCol>

            <MDBCol lg="3" md="6" className="mb-lg-0 mb-5">
              <img
                tag="img"
                src={Backend}
                className="rounded-circle z-depth-1 img-fluid"
                alt="Sample avatar"
              />
              <h5 className="font-weight-bold mt-4 mb-3">Justice George</h5>
              <p className="text-uppercase font-weight-bold grey-text">Backend Developer</p>
              <ul className="list-unstyled mb-0">
                <a href="https://www.linkedin.com/in/justice-george-33a50b184/" className="p-2 fa-lg">
                  <MDBIcon fab icon="linkedin" className="blue-text" />
                </a>
                <a href="https://www.instagram.com/peacejeorgejustce/?hl=en" className="p-2 fa-lg">
                  <MDBIcon fab icon="instagram" className="blue-text" />
                </a>  
                <a href="#!" className="p-2 fa-lg">
                  <MDBIcon fab icon="github" className="blue-text" />
                </a>
              </ul>
            </MDBCol>
          </MDBRow>
        </MDBCardBody>
      </MDBCard>
      </TeamWrapper>
  );
}