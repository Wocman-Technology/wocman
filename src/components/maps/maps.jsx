import React, { Component } from "react";
import { Map, GoogleApiWrapper, InfoWindow, Marker } from "google-maps-react";
import Address from "../../assets/address.svg";
import Phone from "../../assets/phone.svg";
import Envelope from "../../assets/envelope.svg";
import styled from "styled-components";

const Styles = styled.div`
  margin: 5rem auto;
  width: 80%;
  height: 500px;
  & > div:first-child {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    background: #ffffff;
    height: 20%;
    box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
    border-radius: 10px 10px 0px 0px;
    @media (max-width: 768px){
      height: 40%;
    }
    div {
      display: flex;
      height: 100%;
      text-align: center;
      align-items: center;
      justify-content: center;
      /* flex: 1; */
      width: 30%;

      @media (max-width: 768px){
        width: 100%;
        padding: 1rem;
        height: 33%;
      }
      span {
        img {
          height: 80%;
          width: 80%;
        }
      }
    }
  }
  & > div:not(:first-child) {
    position: relative !important;
    height: 80%;
    & > div {
      height: 80%;
    @media (max-width: 768px){
        height: 60% !important;
        }
    }
  }
 
`;

const mapStyles = {
  position: "relative",
  margin: "0 auto",
  width: "100%",
  height: "80%"
};

export class MapContainer extends Component {
  state = {
    showingInfoWindow: false,
    activeMarker: {},
    selectedPlace: {}
  };

  onMarkerClick = (props, marker, e) => {
    this.setState({
      selectedPlace: props,
      activeMarker: marker,
      showingInfoWindow: true
    });
  };

  onClose = props => {
    if (this.state.showingInfoWindow) {
      this.setState({
        showingInfoWindow: false,
        activeMarker: null
      });
    }
  };

  render() {
    return (
      <Styles>
        <div>
          <div>
            <span>
              <img src={Address} alt={Address} />
            </span>
            <span>
              <p>17 Akinsanya street Ojodu Berger, Lagos state</p>
            </span>
          </div>
          <div>
            <span>
              <img src={Phone} alt={Phone} />
            </span>
            <span>
              <p>+2348155419648</p>
            </span>
          </div>
          <div>
            <span>
              <img src={Envelope} alt={Envelope} />
            </span>
            <span>
              <p>hello@wocmantech.com</p>
            </span>
          </div>
        </div>
        <Map
          google={this.props.google}
          zoom={14}
          disableDefaultUI={true}
          style={mapStyles}
          initialCenter={{
            lat: 6.6415809,
            lng: 3.3637405
          }}
        >
        <Marker
          onClick={this.onMarkerClick}
          name={"17 Akinsanya street Ojodu Berger, Lagos state"}
        />
        <InfoWindow
          marker={this.state.activeMarker}
          visible={this.state.showingInfoWindow}
          onClose={this.onClose}
        >
          <div>
            <h4>{this.state.selectedPlace.name}</h4>
          </div>
        </InfoWindow>
        </Map>
      </Styles>
    );
  }
}

export default GoogleApiWrapper({
  apiKey: "AIzaSyBef_mdYffQ4JM-NgowTbVLHKjhSdLnBK4"
})(MapContainer);
